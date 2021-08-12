package com.company;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class HotelManagementSystem extends JFrame implements ActionListener {

    HotelManagementSystem(){
        setBounds(300,250,740,348);

        ImageIcon i1 = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/hotelicon.jpg"));
        Image i2 = i1.getImage().getScaledInstance(740,340,Image.SCALE_DEFAULT);
        ImageIcon i3 = new ImageIcon(i2);
        JLabel j1 = new JLabel(i3);
        j1.setBounds(0,0,740,348);
        add(j1);

        JLabel j2 = new JLabel("HOTEL MANAGEMENT SYSTEM");
        j2.setBounds(50,250,400,20);
        j2.setForeground(Color.BLACK);
        j2.setFont(new Font("Tahoma",Font.PLAIN,20));
        j1.add(j2);

        JButton b1 = new JButton(("Next"));
        b1.setBackground(Color.WHITE);
        b1.setForeground(Color.BLACK);
        b1.setBounds(500,250,150,50);
        b1.addActionListener(this);
        j1.add(b1);

        setLayout(null);
        setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        new Login().setVisible(true);
        this.setVisible(false);
    }

    public static void main(String[] args) {
	// write your code here
        new HotelManagementSystem();

    }



}
