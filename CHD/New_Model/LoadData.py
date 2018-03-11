
import pandas as pd
from sklearn.model_selection import train_test_split

def loadData (datapath):

	data = pd.read_csv(datapath)
	data = data.dropna(axis=0)
	
	train,test = train_test_split(data, test_size=0.25, random_state=7, stratify=data["Congenital Heart Defects"])

	train_X = pd.concat( [ train[train.columns[:1]], train[train.columns[2:]] ], axis=1)
	test_X = pd.concat( [ test[test.columns[:1]], test[test.columns[2:]] ], axis=1)
	train_Y = train["Congenital Heart Defects"]
	test_Y = test["Congenital Heart Defects"]

	return [train_X, test_X, train_Y, test_Y]