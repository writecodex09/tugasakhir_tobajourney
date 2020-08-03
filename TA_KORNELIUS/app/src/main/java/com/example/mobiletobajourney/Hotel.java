package com.example.mobiletobajourney;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class Hotel extends AppCompatActivity {

    Button btn_hotelku;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_hotel);

        btn_hotelku = findViewById(R.id.btn_hotelku);

        btn_hotelku.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotohotel = new Intent(Hotel.this,Detailhotel.class);
                startActivity(gotohotel);
            }
        });
    }
}
