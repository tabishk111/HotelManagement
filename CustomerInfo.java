package com.company;

import com.mysql.cj.protocol.Resultset;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.ResultSet;

import net.proteanit.sql.*;

import static java.lang.System.*;

public class CustomerInfo extends JFrame implements ActionListener {

    JTable t1;
    JButton b1,b2;

    CustomerInfo(){

        t1 = new JTable();
        t1.setBounds(0,40,1320,520);
        add(t1);

        b1 = new JButton("Load Data");
        b1.setBounds(350,580,120,30);
        b1.setBackground(Color.BLACK);
        b1.setForeground(Color.WHITE);
        b1.addActionListener(this);
        add(b1);

        b2 = new JButton("Back");
        b2.setBounds(530,580,120,30);
        b2.setBackground(Color.BLACK);
        b2.setForeground(Color.WHITE);
        b2.addActionListener(this);
        add(b2);

        getContentPane().setBackground(Color.WHITE);

        JLabel l1 = new JLabel("Document Type");
        l1.setBounds(30,20,100,20);
        add(l1);

        JLabel l2 = new JLabel("Number");
        l2.setBounds(230,20,70,20);
        add(l2);

        JLabel l3 = new JLabel("Name");
        l3.setBounds(380,20,70,20);
        add(l3);

        JLabel l4 = new JLabel("Gender");
        l4.setBounds(540,20,70,20);
        add(l4);

        JLabel l5 = new JLabel("Country");
        l5.setBounds(720,20,70,20);
        add(l5);

        JLabel l6 = new JLabel("Room Number");
        l6.setBounds(850,20,100,20);
        add(l6);

        JLabel l7 = new JLabel("Checked In");
        l7.setBounds(1050,20,70,20);
        add(l7);

        JLabel l8 = new JLabel("Deposit");
        l8.setBounds(1200,20,70,20);
        add(l8);



        setLayout(null);
        setBounds(20,50,1330,670);
        setVisible(true);

    }


    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==b1){
            try {
                conn c = new conn();
                String str = "select * from customer";
                Resultset rs = (Resultset) c.s.executeQuery(str);

                t1.setModel(DbUtils.resultSetToTableModel((ResultSet) rs));

            }
            catch (Exception ex){
                out.println(ex);
            }

        }
        else if(e.getSource()==b2){
            new Reception().setVisible(true);
            this.setVisible(false);
        }
    }

    public static void main(String[] args) {
        new CustomerInfo().setVisible(true);
    }
}
