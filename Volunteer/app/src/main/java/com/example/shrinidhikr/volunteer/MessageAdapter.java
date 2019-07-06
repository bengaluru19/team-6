package com.example.shrinidhikr.volunteer;

import android.app.Activity;
import android.content.Context;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.List;

public class MessageAdapter extends ArrayAdapter<EventsData> {
    public MessageAdapter(Context context, int resource, List<EventsData> objects) {
        super(context, resource, objects);
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        if (convertView == null) {
            convertView = ((Activity) getContext()).getLayoutInflater().inflate(R.layout.events_item, parent, false);
        }

        TextView id = (TextView) convertView.findViewById(R.id.id);
        TextView name = (TextView) convertView.findViewById(R.id.name);
        TextView loc = (TextView) convertView.findViewById(R.id.loc);
        TextView dfrom = (TextView) convertView.findViewById(R.id.dfrom);
        TextView tfrom = (TextView) convertView.findViewById(R.id.tfrom);
        TextView status = (TextView) convertView.findViewById(R.id.status);

        EventsData ev = getItem(position);
        id.setText(ev.getId());
        name.setText(ev.getName());
        loc.setText(ev.getLocaddr());
        dfrom.setText(ev.getDfrom());
        tfrom.setText(ev.getTfrom());
        status.setText(ev.getStatus());

        return convertView;
    }
}
