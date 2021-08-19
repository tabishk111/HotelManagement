package com.company;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.ResultSet;

public class AddEmployee extends JFrame implements ActionListener {
    JTextField t1,t2,t3,t4,t5,t6;
    JRadioButton r1,r2;
    JComboBox c1;
    JButton b1;

    public AddEmployee(){

        JLabel name = new JLabel("Name");
        name.setFont(new Font("Fahoma",Font.PLAIN,17));
        name.setBounds(60,30,120,30);
        add(name);

        t1 = new JTextField();
        t1.setBounds(200,30,150,30);
        add(t1);

        JLabel age = new JLabel("Age");
        age.setFont(new Font("Fahoma",Font.PLAIN,17));
         age.setBounds(60,80,120,30);
        add(age);

        t2 = new JTextField();
        t2.setBounds(200,80,150,30);
        add(t2);

        JLabel gender = new JLabel("Gender");
        gender.setFont(new Font("Fahoma",Font.PLAIN,17));
        gender.setBounds(60,130,120,30);
        add(gender);

        r1 = new JRadioButton("M");
        r1.setBounds(200,130,50,30);
        r1.setBackground(Color.WHITE);
        r1.setFont(new Font("Fahoma",Font.PLAIN,14));
        add(r1);

        r2 = new JRadioButton("F");
        r2.setBounds(260,130,50,30);
        r2.setBackground(Color.WHITE);
        r2.setFont(new Font("Fahoma",Font.PLAIN,14));
        add(r2);

        JLabel job = new JLabel("Job");
        job.setFont(new Font("Fahoma",Font.PLAIN,17));
        job.setBounds(60,180,120,30);
        add(job);

        String str[] = {"Manager","Accountant","Chef","Front Desk Clerks","Forters","Housekeeping","Kitchen Staff","Room Service","Waiter/Waitress"};
        c1 = new JComboBox(str);
        c1.setBackground(Color.WHITE);
        c1.setBounds(200,180,120,30);
        add(c1);

        JLabel salary = new JLabel("Salary");
        salary.setFont(new Font("Fahoma",Font.PLAIN,17));
        salary.setBounds(60,230,120,30);
        add(salary);

        t3 = new JTextField();
        t3.setBounds(200,230,150,30);
        add(t3);

        JLabel phone = new JLabel("Phone");
        phone.setFont(new Font("Fahoma",Font.PLAIN,17));
        phone.setBounds(60,280,120,30);
        add(phone);

        t4 = new JTextField();
        t4.setBounds(200,280,150,30);
        add(t4);

        JLabel aadhar = new JLabel("Aadhar");
        aadhar.setFont(new Font("Fahoma",Font.PLAIN,17));
        aadhar.setBounds(60,330,120,30);
        add(aadhar);

        t5 = new JTextField();
        t5.setBounds(200,330,150,30);
        add(t5);

        JLabel email = new JLabel("Email");
        email.setFont(new Font("Fahoma",Font.PLAIN,17));
        email.setBounds(60,380,120,30);
        add(email);

        t6 = new JTextField();
        t6.setBounds(200,380,150,30);
        add(t6);

        ImageIcon i1 = new ImageIcon(ClassLoader.getSystemResource("com/company/Icons/employeeicon.png"));
        Image i2 = i1.getImage().getScaledInstance(400,500,Image.SCALE_DEFAULT);
        ImageIcon i3 = new ImageIcon(i2);
        JLabel l1 = new JLabel(i3);
        l1.setBounds(380,0,400,500);
        add(l1);

        getContentPane().setBackground(Color.WHITE);

        JLabel l2 = new JLabel("Add Employee Details");
        l2.setForeground(Color.BLUE);
        l2.setBounds(420,30,400,30);
        l2.setFont(new Font("Fahoma",Font.PLAIN,30));
        add(l2);

        b1 = new JButton("Submit");
        b1.setBackground(Color.BLACK);
        b1.setForeground(Color.WHITE);
        b1.setBounds(200,430,150,30);
        b1.addActionListener(this);
        add(b1);

        setLayout(null);
        setBounds(350,150,800,550);
        setVisible(true);
    }

    public static void main(String[] args) {
        new AddEmployee();
    }

    @Override
    public void actionPerformed(ActionEvent e) {

        String name = t1.getText();
        String age = t2.getText();
        String salary = t3.getText();
        String phone = t4.getText();
        String aadhar = t5.getText();
        String email = t6.getText();
        String gender = null;
        if(r1.isSelected())
            gender = "Male";
        else if(r2.isSelected())
            gender = "Female";
        String job = (String) c1.getSelectedItem();

        conn c = new conn();

        String str = "insert into employee values('"+name+"','"+age+"','"+gender+"','"+job+"','"+salary+"','"+phone+"','"+aadhar+"','"+email+"')";
        try{
            c.s.executeUpdate(str);
            JOptionPane.showMessageDialog(null,"Employee Added Successfully");
        }
        catch (Exception ex){
            ex.printStackTrace();
        }



    }
}
