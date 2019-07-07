package com.example.shrinidhikr.volunteer;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class RegisterActivity extends AppCompatActivity {

    EditText comp;
    EditText uname;
    EditText phno;
    EditText upass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        comp = (EditText) findViewById(R.id.editText);
        uname = (EditText) findViewById(R.id.editText2);
        phno = (EditText) findViewById(R.id.editText4);
        upass = (EditText) findViewById(R.id.editText3);
        Button b = (Button) findViewById(R.id.register);

        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //if(comp.toString().equals("")&& uname.toString().equals("")&& phno.toString().equals("") && upass.toString().equals("")) {
                    Intent k = new Intent(getApplicationContext(), NavigationActivity.class);
                    startActivity(k);
                //}
                /*else{
                    Toast.makeText(getApplicationContext(), "All fields are necessary",
                            Toast.LENGTH_LONG).show();
                    Log.e("Not valid","no");
                }*/
                Intent i = new Intent(getApplicationContext(),NavigationActivity.class);
                startActivity(i);
            }
        });
    }
}
