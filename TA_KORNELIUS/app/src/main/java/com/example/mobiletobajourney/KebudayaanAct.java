package com.example.mobiletobajourney;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class KebudayaanAct extends AppCompatActivity {

    Button btn_kebudayaanku;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_kebudayaan);

        btn_kebudayaanku = findViewById(R.id.btn_kebudayaanku);

        btn_kebudayaanku.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotokebudayaanku = new Intent(KebudayaanAct.this,Detailkebudayaan.class);
                startActivity(gotokebudayaanku);
            }
        });
    }
}
