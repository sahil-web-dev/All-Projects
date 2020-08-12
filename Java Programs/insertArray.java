/* JAVA PROGRAM TO INSERT AN ELEMENT
 AT SPECIFIC INDEX IN ARRAY */
 import java.util.*;
 public class insertArray
 {
 	public static void main(String[] args) 
 	{
 		Scanner sc=new Scanner(System.in);
 		System.out.println("Enter Total Array Elements=");
 		int size=sc.nextInt();
 		int []arr=new int[size+1];

 		System.out.println("Enter Elements");
 		for(int i=0;i<arr.length-1;i++)
 		{
 			arr[i]=sc.nextInt();
 		}

 		System.out.println("Elements Before Inserting are :-");
 		for(int i=0;i<arr.length;i++)
 		{
 			System.out.println(+arr[i]+" ");
 		}

 		System.out.println("Enter \"location\" at which you want to insert new element=");
 		int loc=sc.nextInt();
 		System.out.println("Enter \"value\" to be inserted=");
 		int value=sc.nextInt();

 		for(int i=arr.length-1;i>loc;i--)
 		{
 			arr[i]=arr[i-1];
 		}
 		arr[loc]=value;

 		System.out.println("Array after insertion of "+value+" at location "+loc+" is=");
 		for(int i=0;i<arr.length;i++)
 		{
 			System.out.println(" "+arr[i]+" ");
 		}
 	}
 }