import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js"
import { getFirestore } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-firestore.js"

const firebaseConfig = {
  // Paste your firebase config here
  apiKey: "AIzaSyC708W40Mivm4vkTlEbCW4iiNrLgtDkqho",
  authDomain: "pagcarrito-4ca82.firebaseapp.com",
  databaseURL: "https://pagcarrito-4ca82-default-rtdb.firebaseio.com",
  projectId: "pagcarrito-4ca82",
  storageBucket: "pagcarrito-4ca82.appspot.com",
  messagingSenderId: "260258023294",
  appId: "1:260258023294:web:c75cdf417c9d4408e8152f"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app)
export const db = getFirestore(app)