# ESI Attendance

## Convention

- Cours
  - Modèle : `Course`
  - DB = `courses`
  - Attributs :
    - `sigle` (PK)
    - `title`
- Étudiant
  - Modèle : `Student`
  - DB : `students`
  - Attributs
    - `matricule` (PK)
    - `first_name`
    - `last_name`
- Table de liaison
  - `student_matricule`
  - `course_sigle`
