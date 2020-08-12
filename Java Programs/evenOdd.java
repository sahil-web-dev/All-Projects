/* JAVA PROGRAM TO CHECK WHETHER NUMBER IS EVEN OR ODD */
import java.util.*;
public class evenOdd
{
	public static void check(int n)
	{
		if(n%2==0)
		{
			System.out.println("Number "+n+" Is Even");
		}
		else
		{
			System.out.println("Number "+n+" Is Odd");
		}
	}
	public static void main(String[] args)
	{
		int n;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter Number=");
		n=sc.nextInt();
		check(n);
	}
}