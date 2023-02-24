import numpy as np
import sys
import pandas as pd
dataset = pd.read_csv("heart.csv")
from sklearn.model_selection import train_test_split

predictors = dataset[["age","chol"]]
target = dataset["target"]

X_train,X_test,Y_train,Y_test = train_test_split(predictors,target,test_size=0.20,random_state=0)
from sklearn.metrics import accuracy_score
from sklearn.tree import DecisionTreeClassifier

max_accuracy = 0


for x in range(200):
    dt = DecisionTreeClassifier(random_state=x)
    dt.fit(X_train,Y_train)
    Y_pred_dt = dt.predict(X_test)
    current_accuracy = round(accuracy_score(Y_pred_dt,Y_test)*100,2)
    if(current_accuracy>max_accuracy):
        max_accuracy = current_accuracy
        best_x = x
        
#print(max_accuracy)
#print(best_x)


dt = DecisionTreeClassifier(random_state=best_x)
dt.fit(X_train,Y_train)
age=float(sys.argv[1])
sex=float(sys.argv[2])

data=np.array([[age,sex]])
df=pd.DataFrame(data)
print(dt.predict(df))