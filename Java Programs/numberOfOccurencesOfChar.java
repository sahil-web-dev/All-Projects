/*JAVA PROGRAM TO FIND NUMBER OF OCCURENCES OF
CHARACTER IN STRING*/
import java.util.*;
public class numberOfOccurencesOfChar
{
	public static void main(String args[])
	{
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the String=");
		String str=sc.nextLine();
		int initial_length=str.length();
		System.out.println("Enter the Character to find occurence=");
		String str1=sc.nextLine();
		str=str.replace(str1,"");
		int final_length=str.length();
		int occurence=initial_length-final_length;
		System.out.println(" '"+str1+"' Character has occured ="+occurence+" times");
	}
}