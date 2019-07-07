package com.example.shrinidhikr.volunteer;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.List;

public class ListActivity extends AppCompatActivity {
    ListView mMessageListView;
    MessageAdapter evadapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list);

        mMessageListView = (ListView) findViewById(R.id.messageListView);
        List<EventsData> evd = new ArrayList<>();
        evd.add(new EventsData("1021","Painting","Painting the walls at Navodaya School","2019-09-23","2019-09-25","2:00 PM","5:00 PM","20","Kaggadaspura","Bengaluru","Karnataka","Available","Rajesh","Coworks"));
        evd.add(new EventsData("2033","Teaching","Teaching nursery kids at Shiksha School","2019-06-15","2019-07-15","10:00 AM","3:00 PM","10","Marathalli","Bengaluru","Karnataka","Closed","Ram","Sach"));
        evadapter = new MessageAdapter(this, R.layout.events_item, evd);
        mMessageListView.setAdapter(evadapter);
    }
}
