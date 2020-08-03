package com.example.mobiletobajourney;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class AirterjunAct extends AppCompatActivity {

    Button airterjun;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_airterjun);

        airterjun = findViewById(R.id.airterjun);


        airterjun.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotoairterjun = new Intent(AirterjunAct.this,DetailairterjunAct.class);
                startActivity(gotoairterjun);
            }
        });
    }
}
