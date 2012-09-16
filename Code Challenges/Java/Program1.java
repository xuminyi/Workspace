
public class Program1 {

	public static void main(String args[]) {
		int[] a = {1,2 , 3, 4};
		int temp = 1;
		int[] result = new int[4];
		for (int i = 0; i < 4; i++) {
			result[i] = temp;
			temp *= a[i];			
		}
		temp = 1;
		for (int i = 3; i >= 0; i--) {
			result[i] = temp * result[i];
			temp *= a[i];
		}
		for (int i = 0; i < 4; i++) 
			System.out.println(result[i]);
	}
}
