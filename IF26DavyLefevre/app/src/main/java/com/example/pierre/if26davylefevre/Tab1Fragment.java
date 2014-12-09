package com.example.pierre.if26davylefevre;

import android.app.Activity;
import android.net.Uri;
import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;


public class Tab1Fragment extends Fragment {

    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState){
        View view = inflater.inflate(R.layout.fragment_tab1, container, false);
        TextView textview = (TextView) view.findViewById(R.id.tabtextview);
        textview.setText(R.string.body1);
        return view;
    }
}