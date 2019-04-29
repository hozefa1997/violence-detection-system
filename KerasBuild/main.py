import cv2
import tensorflow as tf
import sys
import os
import csv
import json

path = sys.argv[1]

# vidcap = cv2.VideoCapture('test/knife.mp4')
vidcap = cv2.VideoCapture(path)

success,image = vidcap.read()
counts = 0
 
while success:
  vidcap.set(cv2.CAP_PROP_POS_MSEC,(counts*1000))     
  success,image = vidcap.read()
  cv2.imwrite("test/frames/frame%d.jpg" % counts, image)  
  counts += 1 

# Loads label file, strips off carriage return
label_lines = [line.rstrip() for line
                   in tf.gfile.GFile("tf_files/retrained_labels.txt")]

#res = { 'robbery' : [] , 'guns' : [] , 'vandalism':[] , 'fist fight' : [] , 'knife' : [] , 'normal' : [] }
res = { 'guns' : [] , 'fist fight' : [] , 'knife' : [] }

for i in range(0,counts-1) :
    # change this as you see fit
    image_path = "test/frames/frame"+str(i)+".jpg"
    # Read in the image_data
    image_data = tf.gfile.FastGFile(image_path, 'rb').read()

    # Unpersists graph from file
    with tf.gfile.FastGFile("tf_files/retrained_graph.pb", 'rb') as f:
        graph_def = tf.GraphDef()
        graph_def.ParseFromString(f.read())
        _ = tf.import_graph_def(graph_def, name='')

    with tf.Session() as sess:
        # Feed the image_data as input to the graph and get first prediction
        softmax_tensor = sess.graph.get_tensor_by_name('final_result:0')

        predictions = sess.run(softmax_tensor, \
                 {'DecodeJpeg/contents:0': image_data})

        # Sort to show labels of first prediction in order of confidence
        top_k = predictions[0].argsort()[-len(predictions[0]):][::-1]
        d = {'robbery':0.0, 'guns':0.0, 'vandalism':0.0, 'fist fight':0.0, 'knife':0.0, 'normal':0.0}
        count = 0
        for node_id in top_k:
            count += 1
            human_string = label_lines[node_id]
            score = predictions[0][node_id]
            d[human_string] += score
            # print('%s (score = %.5f)' % (human_string, score))
        Scores = []
        for k in d.keys():
            Scores.append((d[k]*100, k))
            # print(k, d[k]*100)
        totalSum = 0
        for x in Scores:
            totalSum += x[0]

        finalList = []
        for x in range(len(Scores)):
            finalList.append((Scores[x][0]/totalSum*100, Scores[x][1]))
        finalList = sorted(finalList, reverse=True)
        for x in finalList:
            if x[1] == 'guns':
                res[x[1]].append(x[0])
            elif x[1] == 'knife':
                res[x[1]].append(x[0])
            elif x[1] == 'fist fight':
                res[x[1]].append(x[0])

# print("Average of Guns : " ,str((sum(res['guns'])/len(res['guns']))))
# print("Average of Knife : " ,str((sum(res['knife'])/len(res['knife']))))
# print("Average of fist fight : " ,str((sum(res['fist fight'])/len(res['fist fight']))))

avg = {
    'guns' : sum(res['guns'])/len(res['guns']),
    'knife' : sum(res['knife'])/len(res['knife']),
    'fist fight' : sum(res['fist fight'])/len(res['fist fight'])
}

print(json.dumps(avg))
