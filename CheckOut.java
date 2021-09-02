package com.company;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.ResultSet;
import java.sql.SQLException;

public class CheckOut extends JFrame implements ActionListener {

    Choice c1;
    JTextField t1;
    JButton b1,b2,b3;

    CheckOut(){

        JLabel l1  = new JLabel("Check Out");
        l1.setBounds(100,20,200,30);
        l1.setFont(new Font("Tahoma",Font.PLAIN,30));
        add(l1);


        JLabel l2  = new JLabel("Customer ID");
        l2.setBounds(30,80,100,30);
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
        c1.setBounds(150,80,150,30);
        add(c1);

        JLabel l3  = new JLabel("Room Number");
        l3.setBounds(30,130,100,30);
        add(l3);

        t1 = new JTextField();
        t1.setBounds(150,130,150,30);
        add(t1);

        b1 = new JButton("Check Out");
        b1.setBackground(Color.BLACK);
        b1.setForeground(Color.WHITE);
        b1.addActionListener(this);
        b1.setBounds(30,200,120,30);
        add(b1);

        b2 = new JButton("Back");
        b2.setBackground(Color.BLACK);
        b2.setForeground(Color.WHITE);
        b2.addActionListener(this);
        b2.setBounds(170,200,120,30);
        add(b2);

        ImageIcon i1 = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/tick.jfif"));
        Image i2 = i1.getImage().getScaledInstance(20,20,Image.SCALE_DEFAULT);
        ImageIcon i3 = new ImageIcon(i2);
        b3 = new JButton(i3);
        b3.addActionListener(this);
        b3.setBounds(310,80,20,20);
        add(b3);

        ImageIcon i4 = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/checkout.jfif"));
        Image i6 = i4.getImage().getScaledInstance(400,250,Image.SCALE_DEFAULT);
        ImageIcon i7 = new ImageIcon(i6);
        JLabel l4 = new JLabel(i7);
        l4.setBounds(350,0,400,250);
        add(l4);


        getContentPane().setBackground(Color.WHITE);

        setLayout(null);
        setBounds(300,200,800,300);
        setVisible(true);
    }

    public static void main(String[] args) {
        new CheckOut();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==b1){

            String id = c1.getSelectedItem();
            String room = t1.getText();
            String str = "delete from customer where number = '"+id+"'";
            String str2 = "update room set available = 'Available' where room_number = '"+room+"'";

            conn c = new conn();
            try{
                c.s.executeUpdate(str);
                c.s.executeUpdate(str2);
                JOptionPane.showMessageDialog(null,"Check Out Done");
                new Reception().setVisible(true);
                this.setVisible(false);
            }
            catch (Exception ex){
                ex.printStackTrace();
            }

        }
        else if(e.getSource()==b2){
            new Reception().setVisible(true);
            this.setVisible(false);

        }
        else if(e.getSource()==b3){
            String id = c1.getSelectedItem();
            String room =null;
            conn c = new conn();
            try {
                ResultSet rs = c.s.executeQuery("select * from customer where number = '"+id+"'");
                while(rs.next()){
                    t1.setText(rs.getString("room"));
                }
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        }
    }
}
