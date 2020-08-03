package com.example.mobiletobajourney;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.os.Handler;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    Animation app_splash, btt;
    ImageView app_logo;
    TextView app_judul;
    TextView app_subjudul;

    String USERNAME_KEY = "usernamekey";
    String username_key = "";
    String username_key_new = "";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //load animation
        app_splash = AnimationUtils.loadAnimation(this, R.anim.app_splash);
        btt = AnimationUtils.loadAnimation(this, R.anim.btt);
        //load element
        app_logo = findViewById(R.id.app_logo);
        app_judul = findViewById(R.id.app_judul);
        app_subjudul = findViewById(R.id.app_subjudul);

        //run animation
        app_logo.startAnimation(app_splash);
        app_judul.startAnimation(btt);
        app_subjudul.startAnimation(btt);

        getUsernameLocal();
    }
    public void getUsernameLocal(){
        SharedPreferences sharedPreferences = getSharedPreferences(USERNAME_KEY, MODE_PRIVATE);
        username_key_new = sharedPreferences.getString(username_key,"");
        if(username_key_new.isEmpty()){
            //setting timer untuk 1 detik
            Handler handler = new Handler();
            handler.postDelayed(new Runnable() {
                @Override
                public void run() {
                    //mengubah activity ke activity lain
                    Intent gogetstarted = new Intent(MainActivity.this,GetStartedAct.class);
                    startActivity(gogetstarted);
                    finish();
                }
            },4000);
        }else{
            //setting timer untuk 1 detik
            Handler handler = new Handler();
            handler.postDelayed(new Runnable() {
                @Override
                public void run() {
                    //mengubah activity ke activity lain
                    Intent gogethome = new Intent(MainActivity.this,HomeAct.class);
                    startActivity(gogethome);
                    finish();
                }
            },4000);
        }
    }
}