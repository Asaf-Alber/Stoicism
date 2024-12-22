SELECT knowledge_level, COUNT(*) as count
FROM questionnaire_responses
GROUP BY knowledge_level;