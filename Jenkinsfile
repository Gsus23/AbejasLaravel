pipeline {
  agent any
  stages {
    stage('Prepare') {
      steps {
        sh '''bat \'composer install\'
'''
        sh '''bat \'rm -rf build/api\'
              '''
        sh '''bat \'rm -rf build/coverage\'
                '''
        sh '''bat \'rm -rf build/logs\'
              '''
        sh '''bat \'rm -rf build/pdepend\'
                '''
        sh '''bat \'rm -rf build/phpdox\'
                '''
        sh '''bat \'mkdir build/api\'
                '''
        sh '''bat \'mkdir build/coverage\'
                '''
        sh '''bat \'mkdir build/logs\'
                '''
        sh '''bat \'mkdir build/pdepend\'
                '''
        sh 'bat \'mkdir build/phpdox\''
      }
    }
  }
}