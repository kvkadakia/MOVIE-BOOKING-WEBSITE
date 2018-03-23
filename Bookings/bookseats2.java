package com.example.dell.threading_game;

import android.os.Handler;
import android.os.Looper;
import android.os.Message;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;
import java.security.SecureRandom;
import java.util.ArrayList;


public class MainActivity extends AppCompatActivity {
    private Handler wHandler1; //Handler for the worker thread 1
    private Handler wHandler2;// Handler for the worker thread 2
    Handler mHandler;

    private TextView t1, t2;
    private TextView r1, r2;

    ArrayList<Integer> a = new ArrayList<>();
    ArrayList<Integer> a1 = new ArrayList<>();

    ListView listview, listview1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        t1 = (TextView) findViewById(R.id.textview1);
        t2 = (TextView) findViewById(R.id.textview2);
        r1 = (TextView) findViewById(R.id.response1);
        r2 = (TextView) findViewById(R.id.response2);


        listview = (ListView) findViewById(R.id.listview);
        listview1 = (ListView) findViewById(R.id.listview1);


        Button b = (Button) findViewById(R.id.button);

        b.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {    //start game onclick
                Thread t1 = new Thread(new Workerthread1());
                t1.start();
                Thread t2 = new Thread(new Workerthread2());
                t2.start();
            }
        });

        mHandler = new Handler() {
            public void handleMessage(Message msg) {
                int what = msg.what;
                switch (what) {
                    case 1:
                        t1.setText(String.valueOf(msg.arg1));
                        break;
                    case 2:
                        t2.setText(String.valueOf(msg.arg1));
                        break;
                    case 3:
                        a.add(msg.arg1);
                        ArrayAdapter adapter = new ArrayAdapter(getApplicationContext(), android.R.layout.simple_list_item_1, a);
                        listview.setAdapter(adapter);
                    case 4:
                        a1.add(msg.arg1);
                        ArrayAdapter adapter1 = new ArrayAdapter(getApplicationContext(), android.R.layout.simple_list_item_1, a1);
                        listview1.setAdapter(adapter1);
                        break;
                    case 5:
                        if (msg.arg1 == 0) {
                            r1.setText("Response:Different");
                            new Workerthread1().playgame();
                        } else
                            r1.setText("Response:Same");
                        break;
                    case 6:
                        if (msg.arg1 == 0) {
                            r2.setText("Response:Different");
                            new Workerthread2().playgame();
                        } else
                            r2.setText("Response:Same");
                        break;
                }
            }
        };
    }

    public static int count = 0;
    public class Workerthread1 extends AppCompatActivity implements Runnable {
        private int randno;

        public void run() {
            Looper.prepare();//Looper

            wHandler1 = new Handler() {       //Handle the incoming messages
                public void handleMessage(Message msg) {
                    int what = msg.what;
                    switch (what) {
                        case 1:
                            if (msg.arg1 == randno)
                                Log.i("similarity", "same");
                            else {                                        //In this case the thread 2 provides an incorrect guess to thread 1
                                Message msg1 = mHandler.obtainMessage(5);//Send message to send to the UI thread and inform that thread 1 has to display response incorrect
                                msg1.arg1 = 0;
                                mHandler.sendMessage(msg1);
                            }
                            break;
                        case 2:
                            break;
                    }
                }
            };

            if(count%2==0)
            playgame();

            Looper.loop();
        }

        void playgame() {
            Log.i("count", String.valueOf(count));
            if (count < 20) {
                GenerateRandom();//Generate a random number in thread 1
                Workerthread2 w2 = new Workerthread2();
                w2.GenerateGuess();
                count++;
                try {
                    Thread.sleep(2000);
                } catch (InterruptedException e) {
                    System.out.println("Thread interrupted!");
                }
                ;
            }
        }

        void GenerateRandom() {
            SecureRandom random = new SecureRandom();//Generating a random number in thread 1
            int num = random.nextInt(10000);
            String formatted = String.format("%05d", num);
            randno = Integer.valueOf(formatted);
            Message msg = mHandler.obtainMessage(1);
            msg.arg1 = randno;
            mHandler.sendMessage(msg);
        }

        private int guess;

        void GenerateGuess() {
            SecureRandom random = new SecureRandom();//Thread 2 generates a random number
            int num = random.nextInt(10000);
            String formatted = String.format("%05d", num);
            guess = Integer.valueOf(formatted);
            Message msg1 = mHandler.obtainMessage(3);
            msg1.arg1 = guess;
            mHandler.sendMessage(msg1);

            wHandler2.post(new Runnable() {    //send guess generated by thread 1 to thread 2
                public void run() {
                    Message msg = wHandler2.obtainMessage(1);
                    msg.arg1 = guess;
                    wHandler2.sendMessage(msg);
                }
            });
        }

    }
        public class Workerthread2 implements Runnable {
            private int randno;

            public void run() {
                Looper.prepare();//Looper

                wHandler2 = new Handler() {       //Handle the incoming messages
                    public void handleMessage(Message msg) {
                        int what = msg.what;
                        switch (what) {
                            case 1:
                                if (msg.arg1 == randno)
                                    Log.i("similarity", "same");
                                else {
                                    Message msg1 = mHandler.obtainMessage(6);//New message to send to the UI thread
                                    msg1.arg1 = 0;
                                    mHandler.sendMessage(msg1); //In this case the thread 2 provides an incorrect guess
                                }
                                break;
                            case 2:                             //Handle the GenerateGuess function call of thread1
                                break;
                        }
                    }
                };

                if(count%2!=0)
                playgame();

                Looper.loop();
            }

            void playgame() {
                Log.i("count", String.valueOf(count));
                if (count < 20) {
                    GenerateRandom();                       //Generate a random number in thread 1
                    Workerthread1 w1 = new Workerthread1();
                    w1.GenerateGuess();
                    count++;
                    try {
                        Thread.sleep(1000);
                    } catch (InterruptedException e) {
                        System.out.println("Thread interrupted!");
                    };
                }
            }

            void GenerateRandom() {
                SecureRandom random = new SecureRandom();//Generating a random number in thread 1
                int num = random.nextInt(10000);
                String formatted = String.format("%05d", num);
                randno = Integer.valueOf(formatted);
                Message msg = mHandler.obtainMessage(2);
                msg.arg1 = randno;
                mHandler.sendMessage(msg);
            }

            private int guess;

            void GenerateGuess() {
                SecureRandom random = new SecureRandom();//Thread 2 generates a random number
                int num = random.nextInt(10000);
                String formatted = String.format("%05d", num);
                guess = Integer.valueOf(formatted);
                Message msg1 = mHandler.obtainMessage(4);
                msg1.arg1 = guess;
                mHandler.sendMessage(msg1);

                wHandler1.post(new Runnable() {    //send guess generated by thread 2 to thread 1
                    public void run() {
                        Message msg = wHandler1.obtainMessage(1);
                        msg.arg1 = guess;
                        wHandler1.sendMessage(msg);
                    }
                });
            }
        }
    }


