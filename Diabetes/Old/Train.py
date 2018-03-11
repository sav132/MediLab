
from sklearn import svm
from sklearn.neighbors import KNeighborsClassifier
from sklearn.tree import DecisionTreeClassifier
from sklearn.cross_validation import KFold
from sklearn.linear_model import LogisticRegression
from sklearn import metrics
import warnings
warnings.filterwarnings('ignore')
import matplotlib.pyplot as plt
from keras.models import Sequential
from keras.layers import Dense, Activation
import numpy as np
import keras
import math
from LoadData import loadData


#Load data
train_X, test_X, train_Y, test_Y = loadData ('diabetes.csv')

def KerasModel ():
	model = Sequential()
	model.add(Dense(8, input_dim=8, activation='relu'))
	model.add(Dense(12, activation='relu'))
	model.add(Dense(1, activation='sigmoid'))

	adamm = keras.optimizers.Adam(lr=0.001, beta_1=0.9, beta_2=0.999, epsilon=math.pow(10,-8), decay=0.0)
	model.compile(optimizer=adamm,
              loss='binary_crossentropy',
              metrics=['accuracy'])

	history = model.fit(x=np.array(train_X), y=np.array(train_Y), validation_data=(np.array(test_X), np.array(test_Y)) , nb_epoch=150, batch_size=10)

	plt.plot(history.history['acc'])
	plt.plot(history.history['val_acc'])
	plt.title('model accuracy')
	plt.ylabel('accuracy')
	plt.xlabel('epoch')
	plt.legend(['train', 'test'], loc='upper left')
	plt.show()
	# summarize history for loss
	plt.plot(history.history['loss'])
	plt.plot(history.history['val_loss'])
	plt.title('model loss')
	plt.ylabel('loss')
	plt.xlabel('epoch')
	plt.legend(['train', 'test'], loc='upper left')
	plt.show()

	loss, accuracy = model.evaluate(np.array(test_X), np.array(test_Y), verbose=1)
	print()
	print("Accuracy = {:.2f}".format(accuracy))

	op =  int(input("Want to overwrite weights (1/0) : "))
	if (op == 1) :
		# serialize model to JSONx
		model_json = model.to_json()
		with open("model_face.json", "w") as json_file:
		    json_file.write(model_json)
		model.save_weights("model_face.h5")
		print("Saved model to disk")

KerasModel ()

def LogisticRegressionModel ():
	model = LogisticRegression()
	model.fit(train_X,train_Y)
	prediction=model.predict(test_X)
	print('The accuracy of the Logistic Regression is', metrics.accuracy_score(prediction,test_Y))
