package com.example.mobiletobajourney;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.squareup.picasso.Picasso;

public class TicketDetailAct extends AppCompatActivity {

    Button btn_buy_ticket;
    LinearLayout btn_back;

    TextView nama_wisata,
            lokasi_wisata,
            fasilitas_wisata,
            tanggal_wisata,
            deksripsi_wisata;

    ImageView header_ticket_detail;

    DatabaseReference reference;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ticket_detail);

        btn_buy_ticket = findViewById(R.id.btn_buy_ticket);
        header_ticket_detail = findViewById(R.id.header_ticket_detail);

        nama_wisata = findViewById(R.id.nama_wisata);
        lokasi_wisata = findViewById(R.id.lokasi_wisata);
        fasilitas_wisata = findViewById(R.id.fasilitas_wisata);
        tanggal_wisata = findViewById(R.id.tanggal_wisata);
        deksripsi_wisata = findViewById(R.id.deskripsi_wisata);

        // mengambil data dari intent
        Bundle bundle = getIntent().getExtras();
        final String jenis_tiket_baru =  bundle.getString("jenis_tiket");

        // mengambil data dari firebase berdasarkan intent
        reference = FirebaseDatabase.getInstance().getReference().child("Wisata").child(jenis_tiket_baru);
        reference.addListenerForSingleValueEvent(new ValueEventListener() {
            @Override
            public void onDataChange(@NonNull DataSnapshot dataSnapshot) {
                //menimpa data yang ada dengan yang baru
                nama_wisata.setText(dataSnapshot.child("nama_wisata").getValue().toString());
                lokasi_wisata.setText(dataSnapshot.child("lokasi_wisata").getValue().toString());
                fasilitas_wisata.setText(dataSnapshot.child("fasilitas_wisata").getValue().toString());
                tanggal_wisata.setText(dataSnapshot.child("tanggal_wisata").getValue().toString());
                deksripsi_wisata.setText(dataSnapshot.child("deskripsi_wisata").getValue().toString());
                Picasso.with(TicketDetailAct.this)
                        .load(dataSnapshot.child("url_thumbnail")
                                .getValue().toString()).centerCrop().fit()
                        .into(header_ticket_detail);
            }

            @Override
            public void onCancelled(@NonNull DatabaseError databaseError) {

            }
        });

        btn_buy_ticket = findViewById(R.id.btn_buy_ticket);
        btn_buy_ticket.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gotocheckout = new Intent(TicketDetailAct.this,TicketCheckoutAct.class);
                // meletakan data kepada intent
                gotocheckout.putExtra("jenis_tiket", jenis_tiket_baru);
                startActivity(gotocheckout);
            }
        });

        btn_back = findViewById(R.id.btn_back);
        btn_back.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent gototourandtravel= new Intent(TicketDetailAct.this,TourAndTravelAct.class);
                startActivity(gototourandtravel);
            }
        });


    }
}
