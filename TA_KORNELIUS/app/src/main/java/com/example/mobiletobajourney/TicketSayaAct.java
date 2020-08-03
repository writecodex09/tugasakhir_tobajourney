package com.example.mobiletobajourney;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

public class TicketSayaAct extends AppCompatActivity {

    DatabaseReference reference;
    TextView xnama_wisata, xtanggal_wisata,xlokasi_wisata, xfasilitas_wisata,xdeskripsi_wisata;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ticket_saya);

        xnama_wisata = findViewById(R.id.xnama_wisata);
        xtanggal_wisata = findViewById(R.id.xtanggal_wisata);
        xlokasi_wisata = findViewById(R.id.xlokasi_wisata);
        xfasilitas_wisata = findViewById(R.id.xfasilitas_wisata);
        xdeskripsi_wisata = findViewById(R.id.xdeskripsi_wisata);

        // mengambil data dari intent
        Bundle bundle = getIntent().getExtras();
        final String nama_wisata_baru =  bundle.getString("nama_wisata");

        // mengambil data dari firebase
        reference = FirebaseDatabase.getInstance().getReference().child("Wisata").child(nama_wisata_baru);
        reference.addListenerForSingleValueEvent(new ValueEventListener() {
            @Override
            public void onDataChange(@NonNull DataSnapshot dataSnapshot) {
                xnama_wisata.setText(dataSnapshot.child("nama_wisata").getValue().toString());
                xtanggal_wisata.setText(dataSnapshot.child("tanggal_wisata").getValue().toString());
                xlokasi_wisata.setText(dataSnapshot.child("lokasi_wisata").getValue().toString());
                xfasilitas_wisata.setText(dataSnapshot.child("fasilitas_wisata").getValue().toString());
                xdeskripsi_wisata.setText(dataSnapshot.child("deskripsi_wisata").getValue().toString());
            }

            @Override
            public void onCancelled(@NonNull DatabaseError databaseError) {

            }
        });
    }
}
