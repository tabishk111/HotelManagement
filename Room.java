package com.company;

import com.mysql.cj.protocol.Resultset;
import net.proteanit.sql.DbUtils;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.ResultSet;

import static java.lang.System.out;

public class Room extends JFrame implements ActionListener {
    JTable t1;
    JButton b1,b2;

    Room(){

        ImageIcon i1 = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/room2.jpg"));
        Image i2 = i1.getImage().getScaledInstance(600,600,Image.SCALE_DEFAULT);
        ImageIcon i3 = new ImageIcon(i2);
        JLabel im = new JLabel(i3);
        im.setBounds(500,0,600,600);
        add(im);

        t1 = new JTable();
        t1.setBounds(0,40,500,400);
        add(t1);

        b1 = new JButton("Load Data");
        b1.setBounds(100,460,120,30);
        b1.setBackground(Color.BLACK);
        b1.setForeground(Color.WHITE);
        b1.addActionListener(this);
        add(b1);

        b2 = new JButton("Back");
        b2.setBounds(250,460,120,30);
        b2.setBackground(Color.BLACK);
        b2.setForeground(Color.WHITE);
        b2.addActionListener(this);
        add(b2);

        JLabel l1 = new JLabel("Room Number");
        l1.setBounds(10,10,100,20);
        add(l1);

        JLabel l2 = new JLabel("Availability");
        l2.setBounds(120,10,100,20);
        add(l2);

        JLabel l3 = new JLabel("Status");
        l3.setBounds(220,10,100,20);
        add(l3);

        JLabel l4 = new JLabel("Price");
        l4.setBounds(330,10,100,20);
        add(l4);

        JLabel l5 = new JLabel("Type");
        l5.setBounds(420,10,100,20);
        add(l5);


        getContentPane().setBackground(Color.WHITE);

        setLayout(null);
        setBounds(150,100,1050,600);
        setVisible(true);

    }

    public static void main(String[] args) {
        new Room();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==b1){
            try {
                conn c = new conn();
                String str = "select * from room";
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
}
