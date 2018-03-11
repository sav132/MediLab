

import pandas as pd
from sklearn.model_selection import train_test_split


def loadData (datapath):

	diab=pd.read_csv(datapath)

	outcome=diab['Outcome']
	data=diab[diab.columns[:8]]

	train,test=train_test_split(diab, test_size=0.25,random_state=7,stratify=diab['Outcome'])

	train_X=train[train.columns[:8]]
	test_X=test[test.columns[:8]]
	train_Y=train['Outcome']
	test_Y=test['Outcome']

	return [train_X, test_X, train_Y, test_Y]
