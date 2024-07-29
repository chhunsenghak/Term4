import * as yup from "yup";
const passwordRules = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}$/;
export const categorySchema = yup.object({
    name: yup.string()
        .required("This is required")
        .min(3, 'this field must be at least 3 characters')
        .max(10, 'this field must be at least 10 characters'),
})

export const userSchema = yup.object({
    username: yup
        .string()
        .required("This is required")
        .min(3, 'this field must be at least 3 characters')
        .max(15, 'this field must be at less than 15 characters'),
    age: yup
        .number()
        .required("This is required")
        .min(18, 'this field must be at least 18 years old')
        .max(25, 'this field must be at most 25 years old'),
    email: yup
        .string()
        .email("Invalid email format")
        .required("This is required"),
    password: yup
        .string()
        .required("Password is required")
        .matches(passwordRules, { message: 'Password is not correct' }),
    // .min(8, 'password must contain 8 or more characters with at least one of each: uppercase, lowercase, number and special')
    // .minLowercase(1, 'password must contain at least 1 lower case letter')
    // .minUppercase(1, 'password must contain at least 1 upper case letter')
    // .minNumbers(1, 'password must contain at least 1 number')
    // .minSymbols(1, 'password must contain at least 1 special character')
    confirmPassword: yup
        .string()
        .oneOf([yup.ref("password"), null], "Passwords must match")
        .required("Required"),
})


export const productSchema = yup.object({
    
})