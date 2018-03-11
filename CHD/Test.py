
import numpy as np
import os
from scipy import misc
from keras.models import model_from_json
import pickle

def load_model():
    # load json and create model
    json_file = open('model_face.json', 'r')
    loaded_model_json = json_file.read()
    json_file.close()
    loaded_model = model_from_json(loaded_model_json)
    # load weights into new model
    loaded_model.load_weights("model_face.h5")
    print("Loaded model from disk")
    return loaded_model

model = load_model()

arr = []
X_in = np.array( [ arr ] ,np.float32)
prediction = model.predict(X_in)

prediction = model.predict(X_in) #[1,8] input array
print(prediction)
print(np.max(prediction))
