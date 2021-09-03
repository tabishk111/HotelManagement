package com.company;

import java.util.Scanner;

public class Student{
    String name;
    int rollNo;
    int physics;
    int chemistry;
    int maths;
    int marks;
    Student(String name,int rollNo,int physics,int chemistry,int maths,int marks)
    {
        this.name = name;
        this.rollNo=rollNo;
        this.physics = physics;
        this.chemistry=chemistry;
        this.maths=maths;
        this.marks = marks;
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter number of students");
        int n = sc.nextInt();
        Student[] stud = new Student[n];
        System.out.println("Enter the details");
        for(int i=0;i<n;i++)
        {
            String name = sc.next();
            int rollNo = sc.nextInt();
            int physics = sc.nextInt();
            int chemistry = sc.nextInt();
            int maths = sc.nextInt();
            int marks = physics+chemistry+maths;
            stud[i] = new Student(name,rollNo,physics,chemistry,maths,marks);
        }
        for(int i=0;i<n;i++)
        {
            System.out.print(stud[i].name+" "+stud[i].rollNo+" "+stud[i].marks+" ");
            float perc = (float)stud[i].marks/3;
            if(perc>=75)
                System.out.print("A");
            else if(perc>=60)
                System.out.print("B");
            else if(perc>=45)
                System.out.print("C");
            else if(perc>=35)
                System.out.print("D");
            else if(perc<35)
                System.out.print("F");
            System.out.println();
        }
    }
}
