package com.company;

import javax.swing.*;
import java.sql.*;
import java.awt.event.*;
import java.awt.*;

public class Reception extends JFrame implements ActionListener{

    JButton b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12;

    Reception(){

        b1 = new JButton("New Customer Form");
        b1.setBackground(Color.BLACK);
        b1.setForeground(Color.WHITE);
        b1.addActionListener(this);
        b1.setBounds(10,30,160,30);
        add(b1);

        b2 = new JButton("Room");
        b2.setBackground(Color.BLACK);
        b2.setForeground(Color.WHITE);
        b2.addActionListener(this);
        b2.setBounds(10,70,160,30);
        add(b2);

        b3 = new JButton("Department");
        b3.setBackground(Color.BLACK);
        b3.setForeground(Color.WHITE);
        b3.addActionListener(this);
        b3.setBounds(10,110,160,30);
        add(b3);

        b4 = new JButton("All Employees Info");
        b4.setBackground(Color.BLACK);
        b4.setForeground(Color.WHITE);
        b4.addActionListener(this);
        b4.setBounds(10,150,160,30);
        add(b4);

        b5 = new JButton("Customer Info");
        b5.setBackground(Color.BLACK);
        b5.setForeground(Color.WHITE);
        b5.addActionListener(this);
        b5.setBounds(10,190,160,30);
        add(b5);

        b6 = new JButton("Manager Info");
        b6.setBackground(Color.BLACK);
        b6.setForeground(Color.WHITE);
        b6.addActionListener(this);
        b6.setBounds(10,230,160,30);
        add(b6);

        b7 = new JButton("Check Out");
        b7.setBackground(Color.BLACK);
        b7.setForeground(Color.WHITE);
        b7.addActionListener(this);
        b7.setBounds(10,270,160,30);
        add(b7);

        b8 = new JButton("Update Check Status");
        b8.setBackground(Color.BLACK);
        b8.setForeground(Color.WHITE);
        b8.addActionListener(this);
        b8.setBounds(10,310,160,30);
        add(b8);

        b9 = new JButton("Update Room Status");
        b9.setBackground(Color.BLACK);
        b9.setForeground(Color.WHITE);
        b9.addActionListener(this);
        b9.setBounds(10,350,160,30);
        add(b9);

        b10 = new JButton("Pickup Service");
        b10.setBackground(Color.BLACK);
        b10.setForeground(Color.WHITE);
        b10.addActionListener(this);
        b10.setBounds(10,390,160,30);
        add(b10);

        b11 = new JButton("Search Room");
        b11.setBackground(Color.BLACK);
        b11.setForeground(Color.WHITE);
        b11.addActionListener(this);
        b11.setBounds(10,430,160,30);
        add(b11);

        b12 = new JButton("Logout");
        b12.setBackground(Color.BLACK);
        b12.setForeground(Color.WHITE);
        b12.addActionListener(this);
        b12.setBounds(10,470,160,30);
        add(b12);

        ImageIcon i1  = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/reception.jpg"));
        Image i3 = i1.getImage().getScaledInstance(500, 500,Image.SCALE_DEFAULT);
        ImageIcon i2 = new ImageIcon(i3);
        JLabel l1 = new JLabel(i2);
        l1.setBounds(250,30,500,500);
        add(l1);

        getContentPane().setBackground(Color.WHITE);

        setLayout(null);
        setBounds(300,100,800,600);
        setVisible(true);
    }

    public static void main(String[] args) {
        new Reception().setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {

        if(e.getSource()==b1){
            try {
                new AddCustomer().setVisible(true);
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
            this.setVisible(false);

        }
        else if(e.getSource()==b2) {
            new Room().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b3) {
            try {
                new Department().setVisible(true);
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
            this.setVisible(false);

        }
        else if(e.getSource()==b4) {
            new EmployeeInfo().setVisible(true);
            this.setVisible(false);
        }
        else if(e.getSource()==b5) {
            new CustomerInfo().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b6) {
            new ManagerInfo().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b7) {
            new CheckOut().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b8) {
            new UpdateCheck().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b9) {
            new UpdateRoom().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b10) {
            try {
                new PickUp().setVisible(true);
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
            this.setVisible(false);

        }
        else if(e.getSource()==b11) {
            new SearchRoom().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b12) {
            System.exit(0);

        }






    }
}