pipeline {
  agent any
  stages {
    stage('Prepare') {
      steps {
        sh '''sh \'composer install\'
'''
        sh '''sh \'rm -rf build/api\'
              '''
        sh '''sh \'rm -rf build/coverage\'
                '''
        sh '''sh \'rm -rf build/logs\'
              '''
        sh '''sh \'rm -rf build/pdepend\'
                '''
        sh '''sh \'rm -rf build/phpdox\'
                '''
        sh '''sh \'mkdir build/api\'
                '''
        sh '''sh \'mkdir build/coverage\'
                '''
        sh '''sh \'mkdir build/logs\'
                '''
        sh '''sh \'mkdir build/pdepend\'
                '''
        sh 'sh \'mkdir build/phpdox\''
      }
    }
  }
}