package com.company;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Dashboard extends JFrame implements ActionListener {
    JMenuBar mb;
    JMenu m1, m2;
    JMenuItem i1,i2,i3,i4;


    public Dashboard(){

        mb = new JMenuBar();
        mb.setBounds(0,0,1850,30);
        add(mb);

        m1 = new JMenu("Hotel Management");
        m1.setForeground(Color.RED);
        mb.add(m1);

        m2 = new JMenu("Admin");
        m2.setForeground(Color.BLUE);
        mb.add(m2);

        i1 = new JMenuItem("Reception");
        i1.addActionListener(this);
        m1.add(i1);

        i2 = new JMenuItem("Add Employee");
        i2.addActionListener(this);
        m2.add(i2);

        i3 = new JMenuItem("Add Rooms");
        i3.addActionListener(this);
        m2.add(i3);

        i4 = new JMenuItem("Add Drivers");
        i4.addActionListener(this);
        m2.add(i4);

        ImageIcon ic = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/dashboardimage.jpg"));
        Image i = ic.getImage().getScaledInstance(1950,1000,Image.SCALE_DEFAULT);
        ImageIcon ic2 = new ImageIcon(i);
        JLabel j1 = new JLabel(ic2);
        j1.setBounds(0,30,1950,1000);
        add(j1);

        JLabel j2 = new JLabel("Welcome to Taj Hotel");
        j2.setBounds(450,50,600,50);
        j2.setForeground(Color.BLACK);
        j2.setFont(new Font("fahoma",Font.PLAIN,50));
        j1.add(j2);

        setLayout(null);
        setBounds(0,0,1850,1000);
        setVisible(true);
    }

    public static void main(String[] args) {
        new Dashboard();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getActionCommand().equals("Add Employee")){
            new AddEmployee().setVisible(true);
        }
        else if(e.getActionCommand().equals("Add Rooms")){
            new AddRoom().setVisible(true);
        }
        else if(e.getActionCommand().equals("Add Drivers")){
            new AddDrivers().setVisible(true);
        }
        else if(e.getActionCommand().equals("Reception")){
            new Reception().setVisible(true);
        }

    }
}
