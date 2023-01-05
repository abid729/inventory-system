#include<iostream>
using namespace std;

class Human{
    public:
    int age;
    string name;
    int weight;
    int height;
    
    public:
    int getAge(){
        return this->age;
    }

    int setName(int n){
        this->name = n;
    }
    private:
    int rollno;
};

class Male: public Human{
public:
string color;

void sleep(){
    cout<< "Man sleeping"<<endl;
}

};

int main(){
    Male object1;
    cout<< object1.age<<endl;
    cout<< object1.rollno<<endl;
    cout<< object1.weight<<endl;
    cout<< object1.name<<endl;
    object1.setName('Muhammad Abid');
    cout<< object1.name<<endl;

    cout<< object1.height<<endl;
    cout<< "Every thing is working Perfect";
    return 0;
}