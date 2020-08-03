package com.example.mobiletobajourney;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import com.google.firebase.database.DatabaseReference;

public class TourAndTravelAct extends AppCompatActivity {

    Button btn_paketpertama,
            btn_paketkedua,
            btn_paketketiga;

    DatabaseReference reference;

    String USERNAME_KEY = "usernamekey";
    String username_key = "";
    String username_key_new = "";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tour_and_travel);

        btn_paketpertama = findViewById(R.id.btn_paketpertama);
        btn_paketkedua = findViewById(R.id.btn_paketkedua);
        btn_paketketiga = findViewById(R.id.btn_paketketiga);

        btn_paketpertama.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotopaketpertama = new Intent(TourAndTravelAct.this,TicketDetailAct.class);
                // meletakan data kepada intent
                gotopaketpertama.putExtra("jenis_tiket", "Paket-1");
                startActivity(gotopaketpertama);
            }
        });
        btn_paketkedua.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotopaketkedua = new Intent(TourAndTravelAct.this,TicketDetailAct.class);
                gotopaketkedua.putExtra("jenis_tiket", "Paket-2");
                startActivity(gotopaketkedua);
            }
        });
        btn_paketketiga.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotopaketketiga = new Intent(TourAndTravelAct.this,TicketDetailAct.class);
                gotopaketketiga.putExtra("jenis_tiket", "Paket-3");
                startActivity(gotopaketketiga);
            }
        });
    }
}

