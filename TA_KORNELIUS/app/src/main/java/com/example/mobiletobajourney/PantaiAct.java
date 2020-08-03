package com.example.mobiletobajourney;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class PantaiAct extends AppCompatActivity {

    Button btn_pantai;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pantai);

        btn_pantai = findViewById(R.id.btn_pantai_);


        btn_pantai.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotodetailpantai = new Intent(PantaiAct.this,DetailpantaiAct.class);
                startActivity(gotodetailpantai);
            }
        });
    }
}
