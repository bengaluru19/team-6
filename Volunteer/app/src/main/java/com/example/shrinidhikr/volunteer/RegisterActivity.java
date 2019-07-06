package com.example.shrinidhikr.volunteer;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class RegisterActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        EditText comp = (EditText) findViewById(R.id.editText);
        EditText uname = (EditText) findViewById(R.id.editText2);
        EditText phno = (EditText) findViewById(R.id.editText4);
        EditText upass = (EditText) findViewById(R.id.editText3);
        Button b = (Button) findViewById(R.id.register);

        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),NavigationActivity.class);
                startActivity(i);
            }
        });
    }
}
