import java.util.HashMap;
public class Program3 {
	
	private static int[] a = {1, 2, 4, 5, 6, 7, 8, 3, 9};
	
	public static void main(String[] args) {
		int sum = 10;
		
		int[] b = new int[a.length];
		for (int i = 0; i < a.length; i++) {
			b[i] = 10-a[i];
		}
		
		HashMap map = new HashMap();
		for (int t= 0; t< b.length; t++) {
			for (int i = 0; i < a.length; i++) {
				if (i != t) {
					int substract = b[t] - a[i];
					//System.out.println("Debug:" + substract + ":"+ a[i]);
					if (map.get(Integer.valueOf(a[i])) != null) {
						System.out.println(a[t]+":" +substract + ":"+ a[i]);
						map.remove(Integer.valueOf(a[i]));
					}
					else
						map.put(Integer.valueOf(substract), Integer.valueOf(a[i]));
				}
			}
			map.clear();
		}
	}

}
