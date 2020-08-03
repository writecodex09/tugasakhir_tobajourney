package com.example.mobiletobajourney;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class AlamAct extends AppCompatActivity {

    Button btn_alam;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_alam);

        btn_alam = findViewById(R.id.btn_alam);

        btn_alam.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotodetailalam = new Intent(AlamAct.this,Detailalam.class);
                startActivity(gotodetailalam);
            }
        });

    }
}
