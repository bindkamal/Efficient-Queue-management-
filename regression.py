# first approch to read data from
import pymysql
conn = pymysql.connect(host='localhost', user='root', password='root123', database='test')
a = conn.cursor()
q = 'select * from record;'
a.execute(q)
countrow = a.execute(q)
print("no of row : ",countrow)
data = a.fetchall()
print(data)


import pymysql
import pandas as pd
#connection = pymysql.connect(host='localhost', user='root', password='root123', database='test')
#dataset = pd.read_sql('select * from record', con=connection)
dataset = pd.read_csv('data_set.csv')
independent_variables = dataset.iloc[:, :-1].values
dependent_variables = dataset.iloc[:, 1].values

# split the data into training set and test set
from sklearn.cross_validation import train_test_split
x_train, x_test, y_train, y_test = train_test_split(independent_variables, dependent_variables, test_size=0.33, random_state=0)


# Fitting the linear Regression to the Training set
from sklearn.linear_model import LinearRegression
regressor = LinearRegression()
regressor.fit(x_train, y_train)


import matplotlib.pyplot as plt
# visualise training set
plt.scatter(x_train, y_train, color='red')
plt.plot(x_train, regressor.predict(x_train), color='blue')
plt.title('Day vs No_of_visitors (Training set)')
plt.xlabel('Day')
plt.ylabel('No_of_people')
plt.show()


# test set visualization
plt.scatter(x_test, y_test, color='blue')

# predicting the test set using regrassor
y_predict = regressor.predict(x_test)
plt.scatter(x_test, y_predict, color='green')

#plt.plot(x_train, regressor.predict(x_train), color='blue')
#plt.title('Day vs No_of_visitors (Test set)')
#plt.xlabel('Day')
#plt.ylabel('No_of_people')
plt.show()
