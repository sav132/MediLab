
import numpy as np
import os
from scipy import misc
from keras.models import model_from_json
import pickle
import json

def load_json(filename):
	vector = list()
	data = json.load(open(filename))
	
	vector.append( data[u'Pregnancies'])
	vector.append( data[u'Glucose'])
	vector.append( data[u'BloodPressure'])
	vector.append( data[u'SkinThickness'])
	vector.append( data[u'Insulin'])
	vector.append( data[u'BMI'])
	vector.append( data[u'DiabetesPedigreeFunction'])
	vector.append( data[u'Age'])

	return vector


def load_model():
    # load json and create model
    json_file = open('/root/Desktop/hack/Diabetes/model_face.json', 'r')
    loaded_model_json = json_file.read()
    json_file.close()
    loaded_model = model_from_json(loaded_model_json)
    # load weights into new model
    loaded_model.load_weights("/root/Desktop/hack/Diabetes/model_face.h5")
    return loaded_model


#Start

model = load_model()
X_in = np.array( [ load_json('/root/Desktop/hack/Diabetes/jsonfile.json') ] ,np.float32)

prediction = model.predict(X_in)
print(np.max(prediction))


