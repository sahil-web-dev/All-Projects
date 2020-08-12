/* JAVA PROGRAM TO CHECK WHETHER THE NUMBER IS EVEN OR ODD WITHOUT USING MOD% OPERATOR */
import java.util.*;
public class evenOddWithoutMod
{
	public static void main(String[] args) 
	{
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter Number=");
		int num=sc.nextInt();
		if(((num/2)*2)==num)
		{
			System.out.println(+num+" Is An Even Number");
		}
		else
		{
			System.out.println(+num+" Is An Odd Number");
		}
	}
}