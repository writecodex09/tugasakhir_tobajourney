package com.example.mobiletobajourney;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.github.florent37.shapeofview.shapes.CircleView;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.squareup.picasso.Picasso;

public class HomeAct extends AppCompatActivity {

    Button btn_wisata;
    CircleView btn_to_profile;
    ImageView photo_home_user,pantai, airterjun, hotel, alam, restoran, kebudayaan;
    TextView user_balance, nama_lengkap,bio;

    DatabaseReference reference;

    String USERNAME_KEY = "usernamekey";
    String username_key = "";
    String username_key_new = "";



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        getUsernameLocal();

        btn_wisata = findViewById(R.id.btn_wisata);
        btn_to_profile = findViewById(R.id.btn_to_profile);

        photo_home_user = findViewById(R.id.photo_home_user);
        user_balance = findViewById(R.id.user_balance);
        nama_lengkap = findViewById(R.id.nama_lengkap);
        bio = findViewById(R.id.bio);
        airterjun = findViewById(R.id.airterjun);
        hotel = findViewById(R.id.hotel);
        kebudayaan = findViewById(R.id.kebudayaan);

        pantai = findViewById(R.id.pantai);
        alam = findViewById(R.id.alam);
        restoran = findViewById(R.id.restoran);

        reference = FirebaseDatabase.getInstance().getReference()
                .child("Users").child(username_key_new);

        reference.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(@NonNull DataSnapshot dataSnapshot) {
                nama_lengkap.setText(dataSnapshot.child("nama_lengkap").getValue().toString());
                bio.setText(dataSnapshot.child("bio").getValue().toString());
                user_balance.setText("IDR" + dataSnapshot.child("user_balance").getValue().toString());
                Picasso.with(HomeAct.this)
                        .load(dataSnapshot.child("url_photo_profile")
                                .getValue().toString()).centerCrop().fit()
                        .into(photo_home_user);
            }

            @Override
            public void onCancelled(@NonNull DatabaseError databaseError) {

            }
        });


        btn_to_profile.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotoprofile = new Intent(HomeAct.this,MyProfileAct.class);
                startActivity(gotoprofile);
            }
        });
        pantai.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotopantai = new Intent(HomeAct.this,PantaiAct.class);
                startActivity(gotopantai);
            }
        });
        airterjun.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotoairterjun = new Intent(HomeAct.this,AirterjunAct.class);
                startActivity(gotoairterjun);
            }
        });

        kebudayaan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotokebudayaan = new Intent(HomeAct.this,KebudayaanAct.class);
                startActivity(gotokebudayaan);
            }
        });


        btn_wisata.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotowista = new Intent(HomeAct.this,TourAndTravelAct.class);
                startActivity(gotowista);
            }
        });
        alam.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotoalam = new Intent(HomeAct.this,AlamAct.class);
                startActivity(gotoalam);
            }
        });
        restoran.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotorestoran = new Intent(HomeAct.this,RestaurantAct.class);
                startActivity(gotorestoran);
            }
        });
        hotel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotohotel = new Intent(HomeAct.this,Hotel.class);
                startActivity(gotohotel);
            }
        });

    }
    public void getUsernameLocal(){
        SharedPreferences sharedPreferences = getSharedPreferences(USERNAME_KEY, MODE_PRIVATE);
        username_key_new = sharedPreferences.getString(username_key,"");
    }
}
