#include<iostream>
using namespace std;
int main()
{
	int size;
	cout<<"Enter Size Of Array=";
	cin>>size;
	int newsize=size+1;
	int arr[newsize];
	cout<<"Enter Elements of Array :-"<<endl;
	for(int i=0;i<size;i++)
	{
		cout<<"Enter "<<i<<"th element :-";
		cin>>arr[i];
	}
	cout<<"Array Elements Before Insertion are :-"<<endl;
	for(int i=0;i<newsize;i++)
	{
		cout<<i<<"th elements="<<arr[i]<<endl;
	}
	int loc,value;
	cout<<"Enter \"Location\" where you want to insert new element=";
	cin>>loc;
	cout<<"Enter \"Value\" which you want to insert=";
	cin>>value;
	for(int i=newsize;i>loc;i--)
	{
		arr[i]=arr[i-1];
	}
	arr[loc]=value;

	cout<<"Elements After Insertion are :-"<<endl;
	for(int i=0;i<newsize;i++)
	{
		cout<<i<<"th elements="<<arr[i]<<endl;
	}
	return 0;
}