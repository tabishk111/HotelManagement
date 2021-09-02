package com.company;

import com.mysql.cj.protocol.Resultset;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.ResultSet;
import java.sql.SQLException;

public class UpdateCheck extends JFrame implements ActionListener {
    JButton b1,b2,b3;
    Choice c1;
    JTextField t1,t2,t3,t4,t5,t6;

    UpdateCheck(){

        JLabel l1 = new JLabel("Check-In Details");
        l1.setFont(new Font("Tahoma",Font.PLAIN,30));
        l1.setBounds(60,30,250,30);
        add(l1);

        JLabel l2 = new JLabel("Customer ID");
        l2.setBounds(30,80,100,20);
        add(l2);

        c1 = new Choice();
        try{
           conn c = new conn();
            ResultSet rs = c.s.executeQuery("select * from customer");
            while(rs.next()){
                c1.add(rs.getString("number"));
            }
        }
        catch (Exception ex){
            ex.printStackTrace();
        }
        c1.setBounds(200,80,150,20);
        add(c1);

        JLabel l3 = new JLabel("Room Number");
        l3.setBounds(30,120,100,20);
        add(l3);

        t1 = new JTextField();
        t1.setBounds(200,120,150,20);
        add(t1);

        JLabel l4 = new JLabel("Name");
        l4.setBounds(30,160,100,20);
        add(l4);

        t2 = new JTextField();
        t2.setBounds(200,160,150,20);
        add(t2);

        JLabel l5 = new JLabel("Check-IN");
        l5.setBounds(30,200,100,20);
        add(l5);

        t3 = new JTextField();
        t3.setBounds(200,200,150,20);
        add(t3);

        JLabel l6 = new JLabel("Amount Paid");
        l6.setBounds(30,240,100,20);
        add(l6);

        t4 = new JTextField();
        t4.setBounds(200,240,150,20);
        add(t4);

        JLabel l7 = new JLabel("Pending Amount");
        l7.setBounds(30,280,100,20);
        add(l7);

        t5 = new JTextField();
        t5.setBounds(200,280,150,20);
        add(t5);

        b1 = new JButton("Check");
        b1.setBackground(Color.BLACK);
        b1.setForeground(Color.WHITE);
        b1.addActionListener(this);
        b1.setBounds(30,340,100,30);
        add(b1);

        b2 = new JButton("Update");
        b2.setBackground(Color.BLACK);
        b2.setForeground(Color.WHITE);
        b2.addActionListener(this);
        b2.setBounds(140,340,100,30);
        add(b2);

        b3 = new JButton("Back");
        b3.setBackground(Color.BLACK);
        b3.setForeground(Color.WHITE);
        b3.addActionListener(this);
        b3.setBounds(250,340,100,30);
        add(b3);

        ImageIcon i1 = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/checkin.jpg"));
        Image i2 = i1.getImage().getScaledInstance(550,370,Image.SCALE_DEFAULT);
        ImageIcon i3 = new ImageIcon(i2);
        JLabel l8 = new JLabel(i3);
        l8.setBounds(400,20,550,370);
        add(l8);

        getContentPane().setBackground(Color.WHITE);

        setLayout(null);
        setBounds(200,100,1000,450);
        setVisible(true);
    }

    public static void main(String[] args) {
        new UpdateCheck().setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {

        if(e.getSource()==b1){

            String room = null;
            String price = null;
            String deposit = null;
            int amountPaid=0;
            String id = c1.getSelectedItem();
            conn c = new conn();
            try {
                ResultSet rs = c.s.executeQuery("select * from customer where number = '"+id+"'");

                while(rs.next()){
                    t1.setText(rs.getString("room"));
                    t2.setText(rs.getString("name"));
                    t3.setText(rs.getString("status"));
                    t4.setText(rs.getString("deposit"));
                    room = rs.getString("room");
                    deposit = rs.getString("deposit");
                }
                ResultSet rs2 = c.s.executeQuery("select * from room where room_number = '"+room+"'");
                while(rs2.next()){
                    price = rs2.getString("price");
                }
                amountPaid = Integer.parseInt(price)-Integer.parseInt(deposit);
                t5.setText(Integer.toString(amountPaid));

            } catch (SQLException ex) {
                ex.printStackTrace();
            }

        }
        else if(e.getSource()==b2){

            try {
                conn c = new conn();
                String room = t1.getText();
                String status = t3.getText();
                String deposit = t4.getText();

                String str = "update customer set status = '"+status+"', deposit = '"+deposit+"' where room = '"+room+"'";
                c.s.executeUpdate(str);
                JOptionPane.showMessageDialog(null,"Room Updated Successfully");
                new Reception().setVisible(true);
                this.setVisible(false);
            }
            catch (Exception ex){
                ex.printStackTrace();
            }



        }
        else if(e.getSource()==b3){
            new Reception().setVisible(true);
            this.setVisible(false);
        }
    }
}
