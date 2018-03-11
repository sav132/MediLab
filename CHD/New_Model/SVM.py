
import os
import numpy as np
from collections import Counter
from sklearn import svm
from sklearn.metrics import accuracy_score
from LoadData import loadData
import json

#Data Model
def getSVMModel(verbose = 0):

	train_X, test_X, train_Y, test_Y = loadData ('/root/Desktop/hack/CHD/New_Model/dataset.csv')

	train_X = train_X[:len(train_X)/100]
	train_Y = train_Y[:len(train_Y)/100]

	model = svm.SVC(kernel="rbf", C = 100, gamma = 0.1)

	#train model
	model.fit(train_X, train_Y)
	predicted_labels = model.predict(test_X)

	if(verbose == 1):
		print ("FINISHED classifying. accuracy score : " )
		print (accuracy_score(test_Y, predicted_labels) )

	return model

#Load Test data
def load_json(filename):
	
	vector = list()
	data = json.load(open(filename))
	
	vector.append( data[u'AnnualPerCapitaIncome'])
	vector.append( data[u'MaternalDeliveryAge'])
	vector.append( data[u'FamilyHistory'])
	vector.append( data[u'MaternalPreviousIllnessHistory'])
	vector.append( data[u'NutritionAndFolicAcidSupplementation'])
	vector.append( data[u'MaternalIllness'])
	vector.append( data[u'MedicationUse'])
	vector.append( data[u'EnvironmentalExposuresOfRiskFactors'])
	vector.append( data[u'UnhealthyLifestyle'])

	return vector


model = getSVMModel()
X_in = np.array( [ load_json('/root/Desktop/hack/CHD/New_Model/jsonfile.json') ] ,np.float32)

prediction = model.predict(X_in)
print (np.max(prediction))
