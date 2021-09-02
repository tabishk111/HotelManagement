package com.company;

import net.proteanit.sql.DbUtils;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.ResultSet;

public class SearchRoom extends JFrame implements ActionListener {

    JComboBox c1;
    JCheckBox c2;
    JButton b1,b2;
    JTable t1;
    SearchRoom(){
        JLabel l1 = new JLabel("Search For Room");
        l1.setFont(new Font("Tahoma",Font.PLAIN,30));
        l1.setBounds(300,30,300,30);
        add(l1);

        JLabel l2 = new JLabel("Room Bed Type");
        l2.setBounds(50,100,100,20);
        add(l2);

        JLabel l3 = new JLabel("Room Number");
        l3.setBounds(50,180,100,20);
        add(l3);

        JLabel l4 = new JLabel("Availability");
        l4.setBounds(250,180,100,20);
        add(l4);

        JLabel l5 = new JLabel("Status");
        l5.setBounds(450,180,100,20);
        add(l5);

        JLabel l6 = new JLabel("Price");
        l6.setBounds(650,180,100,20);
        add(l6);

        JLabel l7 = new JLabel("Bed Type");
        l7.setBounds(850,180,100,20);
        add(l7);

        c1 = new JComboBox(new String[]{"Single Bed","Double Bed"} );
        c1.setBounds(170,100,150,20);
        c1.setBackground(Color.WHITE);
        add(c1);

        c2 = new JCheckBox("Available");
        c2.setBounds(650,100,150,20);
        c2.setBackground(Color.WHITE);
        add(c2);

        t1 = new JTable();
        t1.setBounds(0,200,1000,300);
        t1.setBackground(Color.WHITE);
        add(t1);

        b1 = new JButton("Submit");
        b1.setBackground(Color.BLACK);
        b1.setForeground(Color.WHITE);
        b1.addActionListener(this);
        b1.setBounds(300,520,120,30);
        add(b1);

        b2 = new JButton("Back");
        b2.setBackground(Color.BLACK);
        b2.setForeground(Color.WHITE);
        b2.addActionListener(this);
        b2.setBounds(500,520,120,30);
        add(b2);

        getContentPane().setBackground(Color.WHITE);

        setLayout(null);
        setBounds(200,100,1000,600);
        setVisible(true);

    }

    public static void main(String[] args) {
        new SearchRoom().setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==b1){
            try{
                String str = "select * from room where bed_type = '"+c1.getSelectedItem()+"'";
                String str2 = "select * from room where available = 'Available' and bed_type = '"+c1.getSelectedItem()+"'";
                conn c =new conn();
                if(c2.isSelected()) {
                    ResultSet rs2 = c.s.executeQuery(str2);
                    t1.setModel(DbUtils.resultSetToTableModel(rs2));
                }
                else {
                    ResultSet rs = c.s.executeQuery(str);
                    t1.setModel(DbUtils.resultSetToTableModel(rs));
                }
            }
            catch (Exception ex){
                ex.printStackTrace();
            }

        }
        else if(e.getSource()==b2){
            new Reception().setVisible(true);
            this.setVisible(false);
        }

    }
}
