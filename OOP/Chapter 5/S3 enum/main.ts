enum Gender {
    MALE,
    FEMALE
}

enum Major {
    WEP,
    SNA
}

enum Topic {
    JAVASCRIPT,
    PHP,
    HTML,
    TS,
    VUE
}

class student {
    private name: string;
    private gender: Gender;
    private major: Major;
    constructor(name: string, gender: Gender, major: Major) {
        this.name = name;
        this.gender = gender;
        this.major = major;
    }
}

class Result extends student {
    private Topic: Topic;
    score: number
    constructor(name: string, gender: Gender, major: Major, score: number, topic: Topic) {
        super(name, gender, major)
        this.score = score;
        this.Topic = topic;
    }
}

let me = new student("Me", Gender.FEMALE, Major.SNA);
let myscore = new Result("Me", Gender.FEMALE, Major.SNA, 100, Topic.HTML);
