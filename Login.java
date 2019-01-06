package com.themovieverse.kinu;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.AppCompatButton;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class Login extends AppCompatActivity {

    private EditText email;
    private EditText pw;
    private AppCompatButton btn;
    private TextView sign;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        email = findViewById(R.id.email);
        pw = findViewById(R.id.pw);
        btn = findViewById(R.id.btn);
        sign = findViewById(R.id.link_signup);

        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                login_button();
            }
        });

        sign.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent signIntent = new Intent(view.getContext(), Regist.class);
                startActivity(signIntent);
            }
        });

        if(login()) {
            Intent home = new Intent(this, MainActivity.class);
            startActivity(home);
        }
    }

    public void login_button() {

        SharedPreferences pref = this.getSharedPreferences("com.themovieverse.kinu", Context.MODE_PRIVATE);
        SharedPreferences.Editor editor = pref.edit();

        String emailText = email.getText().toString();
        String pwText = pw.getText().toString();

        if (emailText.isEmpty() || !android.util.Patterns.EMAIL_ADDRESS.matcher(emailText).matches()) {
            email.setError("Enter a valid email address");
        }

        if (pwText.isEmpty() || pwText.length() < 4 || pwText.length() > 10) {
            pw.setError("At least 4 characters");
        }

        if(emailText.isEmpty() || !android.util.Patterns.EMAIL_ADDRESS.matcher(emailText).matches() || pwText.isEmpty() || pwText.length() < 4 || pwText.length() > 10) {

        }
        else {
            editor.putString("email", emailText);
            editor.putString("pw", pwText);
            editor.commit();
            Intent home = new Intent(this, MainActivity.class);
            startActivity(home);
        }
    }

    private boolean login() {
        SharedPreferences pref = this.getSharedPreferences("com.themovieverse.kinu", Context.MODE_PRIVATE);

        if(pref.contains("email") || pref.contains("pw")) {
            return true;
        }
        else {
            return false;
        }
    }
}
