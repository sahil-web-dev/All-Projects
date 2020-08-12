/*C++ PROGRAM TO CALCULATE NUMBER OF OCCURENCES
OF CHARACTER IN A STRING */
#include<iostream>
#include<string>
using namespace std;
int count(string str,char c)
{
	int count=0;
	for(int i=0;i<str.length();i++)
	{
		if(str[i]==c)
		{
			count++;
		}
	}
	return count;
}
int main()
{
	string str="Hello Weooo";
	char c='o';
	//cout<<"Enter String :-";
	//cin>>str;
	//cout<<"Enter Character :-";
	//cin>>c;
	cout<<"Total Occurences = "<<count(str,c);
}