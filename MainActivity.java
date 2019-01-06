package com.themovieverse.kinu;

import android.content.Context;
import android.content.SharedPreferences;
import android.os.Build;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.KeyEvent;
import android.view.Window;
import android.webkit.WebChromeClient;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

import java.io.UnsupportedEncodingException;
import java.net.URLEncoder;

public class MainActivity extends AppCompatActivity {

    private WebView myWebView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        if (Build.VERSION.SDK_INT >= 21) {
            Window window = getWindow();
            window.setStatusBarColor(getResources().getColor(R.color.button_green));
        }

        try {
            loadWeb();
        } catch (UnsupportedEncodingException e) {
            e.printStackTrace();
        }
    }

    private void loadWeb() throws UnsupportedEncodingException {
        SharedPreferences pref = this.getSharedPreferences("com.themovieverse.kinu", Context.MODE_PRIVATE);
        String email = pref.getString("email", "null");
        String pw = pref.getString("pw", "null");

        myWebView = findViewById(R.id.webview);
        myWebView.setWebChromeClient(new WebChromeClient());
        myWebView.setWebViewClient(new WebViewClient());
        WebSettings webSettings = myWebView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        myWebView.loadUrl("https://kinu-app.com/app/index.php");
        String data = "email=" + URLEncoder.encode(email, "UTF-8") + "&passwort=" + URLEncoder.encode(pw, "UTF-8");
        myWebView.postUrl("https://kinu-app.com/app/index.php?user=log", data.getBytes());
    }

    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        if ((keyCode == KeyEvent.KEYCODE_BACK) && myWebView.canGoBack()) {
            //if Back key pressed and webview can navigate to previous page
            myWebView.goBack();
            // go back to previous page
            return true;
        }
        else
        {
            finish();
            // finish the activity
        }
        return super.onKeyDown(keyCode, event);
    }
}
