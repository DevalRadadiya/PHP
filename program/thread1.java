class Thread1 extends Thread {
	public void run(){
		int i=0;
		while(i<=100){
			System.out.println("Thread 1");
			System.out.println("I am happy..!");
			i++;
		}
	}
}
class Thread2 extends Thread {
	public void run(){
		int i=0;
		while(i<=100){
			System.out.println("Thread 2")
			System.out.println("I am sad..!");
			i++;
		}
	}
}